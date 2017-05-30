[![](https://scdn.rapidapi.com/RapidAPI_banner.png)](https://rapidapi.com/package/GoogleCloudVision/functions?utm_source=RapidAPIGitHub_GoogleCloudVisionFunctions&utm_medium=button&utm_content=RapidAPI_GitHub)

# GoogleCloudVision Package
Detect faces, labels, logos, text and more in images.
* Domain: [GoogleCloudVision](http://google.com)
* Credentials: apiKey

## How to get credentials: 
1. Go to the [Google API Console](https://console.developers.google.com/flows/enableapi?apiid=distance_matrix_backend&reusekey=true)
2. Create or select a project.
3. Click Continue to enable the API.
4. On the Credentials page, get an API key (and set the API key restrictions). 
Note: If you have an existing unrestricted API key, or a key with server restrictions, you may use that key.

## Custom datatypes: 
 |Datatype|Description|Example
 |--------|-----------|----------
 |Datepicker|String which includes date and time|```2016-05-28 00:00:00```
 |Map|String which includes latitude and longitude coma separated|```50.37, 26.56```
 |List|Simple array|```["123", "sample"]``` 
 |Select|String with predefined values|```sample```
 |Array|Array of objects|```[{"Second name":"123","Age":"12","Photo":"sdf","Draft":"sdfsdf"},{"name":"adi","Second name":"bla","Age":"4","Photo":"asfserwe","Draft":"sdfsdf"}] ```
 

## GoogleCloudVision.detectFaces
Detects multiple faces within an image, along with the associated key facial attributes like emotional state or wearing headwear.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | Single image for analysis.
| maxResults    | Number     | Maximum results to return
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.detectLabels
Detects broad sets of categories within an image, ranging from modes of transportation to animals.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | Single image for analysis.
| maxResults    | Number     | Maximum results to return
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.detectLandmarks
Detects popular natural and man-made structures within an image.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | Single image for analysis.
| maxResults    | Number     | Maximum results to return
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.detectText
Performs Optical Character Recognition. It detects and extracts text within an image, with support for a broad range of languages, along with support for automatic language identification.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | Single image for analysis.
| languageHints | String     | List of languages to use for text detection.
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.detectLogos
Detects popular product logos within an image.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | Single image for analysis.
| maxResults    | Number     | Maximum results to return
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.detectImageProperties
Detects general attributes of the image, such as dominant color.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | Single image for analysis.
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.detectExplicitContent
Detects explicit content like adult content or violent content within an image.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | Single image for analysis.
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.batchPictureDetections
Detects 1 property for several images

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| images        | List       | Several images for analysis.
| type          | Select     | One type of analysis. Possible values: faces|labels|landmarks|text|logos|imageproperties|explicitcontent.
| maxResults    | Number     | Maximum results to return (same for all requested pictures).
| languageHints | String     | List of languages to use for text detection. Applied only if 'text' type chosen
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

## GoogleCloudVision.batchTypeDetections
Detects several properties for one image.

| Field         | Type       | Description
|---------------|------------|----------
| apiKey        | credentials| The api key obtained from Google Developers Console.
| image         | File       | One image for analysis.
| types         | List       | Types of analysis. Possible values: faces, labels, landmarks, text, logos, imageproperties, explicitcontent.
| maxResults    | Number     | Maximum results to return
| languageHints | String     | List of languages to use for text detection. Applied only if 'text' type also chosen
| minCoordinates| Map        | Minimal latitude and longitude coma separated in degrees. 
| maxCoordinates| Map        | Maximal latitude and longitude coma separated in degrees.

