// 20170329134738
// https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js

eqfeed_callback({
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": {
        "mag": 3.2,
        "place": "51km SSE of Boca de Yuma, Dominican Republic",
        "time": 1347595485,
        "tz": -300,
        "url": "http://earthquake.usgs.gov/earthquakes/eventpage/pr12258000",
        "felt": null,
        "cdi": null,
        "mmi": null,
        "alert": null,
        "status": "REVIEWED",
        "tsunami": null,
        "sig": "158",
        "net": "pr",
        "code": "12258000",
        "ids": ",pr12258000,",
        "sources": ",pr,",
        "types": ",geoserve,nearby-cities,origin,tectonic-summary,"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
          -68.4921,
          17.9265,
          92
        ]
      },
      "id": "pr12258000"
    },
    {
      "type": "Feature",
      "properties": {
        "mag": 5,
        "place": "93km ESE of Yining Xian, China",
        "time": 1347592907,
        "tz": 480,
        "url": "http://earthquake.usgs.gov/earthquakes/eventpage/usc000cnks",
        "felt": 0,
        "cdi": 1,
        "mmi": null,
        "alert": null,
        "status": "REVIEWED",
        "tsunami": null,
        "sig": "385",
        "net": "us",
        "code": "c000cnks",
        "ids": ",usc000cnks,",
        "sources": ",us,",
        "types": ",dyfi,eq-location-map,general-link,geoserve,historical-moment-tensor-map,historical-seismicity-map,nearby-cities,origin,p-wave-travel-times,phase-data,scitech-link,"
      },
      "geometry": {
        "type": "Point",
        "coordinates": [
          82.3568,
          43.6271,
          26.93
        ]
      },
      "id": "usc000cnks"
    },
  ]
});