# naij-fx-rates
An API for fetching naira exhange rates

## Endpoints
App URL `https://naij-fx-rates.herokuapp.com`

There are three API endpoints:

`/api/v1/rates/`
`/api/v1/rates/dollar/`
`/api/v1/rates/pounds/`

## Usage

`GET` `/api/v1/rates/`
This route returns exchange rate of `Naira` against `Dollar` and `Pounds` with the following response:
```json
[
    {
        "id": 203,
        "Currency": "Pounds",
        "Date": "2018-10-01",
        "BUY": "474 ",
        "SELL": " 480***"
    },
    {
        "id": 203,
        "Currency": "Dollar",
        "Date": "2018-10-01",
        "BUY": "358 ",
        "SELL": " 361***"
    }
]

```




`GET` `/api/v1/rates/dollar/`
This route returns exchange rate of `Naira` against `Dollar` with the following response:

```json
{
    "id": 203,
    "Currency": "Dollar",
    "Date": "2018-10-01",
    "BUY": "358 ",
    "SELL": " 361***"
}
```

