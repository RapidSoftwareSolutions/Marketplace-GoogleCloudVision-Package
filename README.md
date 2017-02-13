<p align="left">
  <a href="https://rapidapi.com/package/GoogleCloudVision/functions?utm_source=RapidAPIGitHub_GoogleCloudVisionFunctions&utm_medium=button&utm_content=RapidAPI_GitHub">
    <img src="https://storage.googleapis.com/rapidapi-temp/background.png"/>
  </a>
</p>

# GoogleCloudVision Package
Detect faces, labels, logos, text and more in images.
* Domain: google.com
* Credentials: apiKey

## How to get credentials: 
1. Go to the [Google API Console](https://console.developers.google.com/flows/enableapi?apiid=distance_matrix_backend&reusekey=true)
2. Create or select a project.
3. Click Continue to enable the API.
4. On the Credentials page, get an API key (and set the API key restrictions). 
Note: If you have an existing unrestricted API key, or a key with server restrictions, you may use that key.


## GoogleCloudVision.detectFaces
Detects multiple faces within an image, along with the associated key facial attributes like emotional state or wearing headwear.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| The api key obtained from Google Developers Console.
| image       | String     | Single image for analysis.
| maxResults  | Number     | Maximum results to return
| minLatitude | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude| String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude| String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

## GoogleCloudVision.detectLabels
Detects broad sets of categories within an image, ranging from modes of transportation to animals.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| The api key obtained from Google Developers Console.
| image       | String     | Single image for analysis.
| maxResults  | Number     | Maximum results to return
| minLatitude | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude| String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude| String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

## GoogleCloudVision.detectLandmarks
Detects popular natural and man-made structures within an image.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| The api key obtained from Google Developers Console.
| image       | String     | Single image for analysis.
| maxResults  | Number     | Maximum results to return
| minLatitude | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude| String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude| String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

## GoogleCloudVision.detectText
Performs Optical Character Recognition. It detects and extracts text within an image, with support for a broad range of languages, along with support for automatic language identification.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| The api key obtained from Google Developers Console.
| image        | String     | Single image for analysis.
| languageHints| String     | List of languages to use for text detection.
| minLatitude  | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude | String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude  | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude | String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

## GoogleCloudVision.detectLogos
Detects popular product logos within an image.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| The api key obtained from Google Developers Console.
| image       | String     | Single image for analysis.
| maxResults  | Number     | Maximum results to return
| minLatitude | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude| String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude| String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

## GoogleCloudVision.detectImageProperties
Detects general attributes of the image, such as dominant color.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| The api key obtained from Google Developers Console.
| image       | String     | Single image for analysis.
| minLatitude | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude| String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude| String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

## GoogleCloudVision.detectExplicitContent
Detects explicit content like adult content or violent content within an image.

| Field       | Type       | Description
|-------------|------------|----------
| apiKey      | credentials| The api key obtained from Google Developers Console.
| image       | String     | Single image for analysis.
| minLatitude | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude| String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude| String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

## GoogleCloudVision.batchPictureDetections
Detects 1 property for several images

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| The api key obtained from Google Developers Console.
| images       | Array      | Several images for analysis.
| type         | String     | One type of analysis. `Possible values: faces or labels or landmarks or text or logos or imageproperties or explicitcontent.`
| maxResults   | Number     | Maximum results to return (same for all requested pictures).
| languageHints| String     | List of languages to use for text detection. Applied only if `text` type chosen
| minLatitude  | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0] (same for all requested pictures)..
| minLongitude | String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0] (same for all requested pictures)..
| maxLatitude  | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0] (same for all requested pictures)..
| maxLongitude | String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0] (same for all requested pictures)..

## GoogleCloudVision.batchTypeDetections
Detects several properties for one image.

| Field        | Type       | Description
|--------------|------------|----------
| apiKey       | credentials| The api key obtained from Google Developers Console.
| image        | String     | One image for analysis.
| types        | Array      | Types of analysis. `Possible values: faces, labels, landmarks, text, logos, imageproperties, explicitcontent.`
| maxResults   | Number     | Maximum results to return
| languageHints| String     | List of languages to use for text detection. Applied only if `text` type also chosen
| minLatitude  | String     | Minimal latitude in degrees. It must be in the range [-90.0, +90.0].
| minLongitude | String     | Minimal longitude in degrees. It must be in the range [-180.0, +180.0].
| maxLatitude  | String     | Maximal latitude in degrees. It must be in the range [-90.0, +90.0].
| maxLongitude | String     | Maximal longitude in degrees. It must be in the range [-180.0, +180.0].

