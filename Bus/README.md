# Bus

This app gets the latest schedule for a specific ride from Open Data Transport API

The API's URL looks like this:

`http://transport.opendata.ch/v1/connections?from=START_ID&to=STOP_ID&limit=NUMBERS_OF_CONNECTIONS`

I looked for the ID of specifics bus stops, with `limit=1`, limiting the results for the next passing time, that way I can have the next schedule time.

You can get the full details about the Open Data Transport API [here](https://transport.opendata.ch/docs.html).
