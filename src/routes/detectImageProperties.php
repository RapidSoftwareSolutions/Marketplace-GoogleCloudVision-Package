<?php
$app->post('/api/GoogleCloudVision/detectImageProperties', function($request, $response, $args){
    $settings = $this->settings;

    //checking properly formed json
    $checkRequest = $this->validation;
    $validateRes = $checkRequest->validate($request, ['apiKey','image']);
    if(!empty($validateRes) && isset($validateRes['callback']) && $validateRes['callback']=='error') {
        return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($validateRes);
    } else {
        $post_data = $validateRes;
    }

    //forming request to vendor API
    $body = array();
    $body['requests']['image']['source']['gcsImageUri'] = $post_data['args']['image'];
    $body['requests']['features']['type'] = 'IMAGE_PROPERTIES';


    //optional geo settings
    if(!empty($post_data['args']['minLatitude'])) {
        $body['requests']['imageContext']['latLongRect']['minLatLng']['latitude'] = $post_data['args']['minLatitude'];
    };
    if(!empty($post_data['args']['minLongitude'])) {
        $body['requests']['imageContext']['latLongRect']['minLatLng']['longitude'] = $post_data['args']['minLongitude'];
    };
    if(!empty($post_data['args']['maxLatitude'])) {
        $body['requests']['imageContext']['latLongRect']['maxLatLng']['latitude'] = $post_data['args']['maxLatitude'];
    };
    if(!empty($post_data['args']['maxLongitude'])) {
        $body['requests']['imageContext']['latLongRect']['maxLatLng']['longitude'] = $post_data['args']['maxLongitude'];
    };



    $query_str = $settings['api_url'].$post_data['args']['apiKey'];

    //requesting remote API
    $client = $this->httpClient;
    try {

        $resp = $client->post($query_str, [
            'json' => $body
        ]);
        $responseBody = $resp->getBody()->getContents();
        $rawBody = json_decode($resp->getBody());
        $error = $rawBody->responses[0]->error;

        $all_data[] = $rawBody;
        if($response->getStatusCode() == '200' && !isset($error)) {
            $result['callback'] = 'success';
            $result['contextWrites']['to'] = is_array($all_data) ? $all_data : json_decode($all_data);
        } else {
            $result['callback'] = 'error';
            $result['contextWrites']['to']['status_code'] = 'API_ERROR';
            $result['contextWrites']['to']['status_msg'] = is_array($responseBody) ? $responseBody : json_decode($responseBody);
        }

    } catch (\GuzzleHttp\Exception\ClientException $exception) {

        $responseBody = $exception->getResponse()->getBody();
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\ServerException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    } catch (GuzzleHttp\Exception\BadResponseException $exception) {

        $responseBody = $exception->getResponse()->getBody(true);
        $result['callback'] = 'error';
        $result['contextWrites']['to'] = json_decode($responseBody);

    }


    return $response->withHeader('Content-type', 'application/json')->withStatus(200)->withJson($result);

});