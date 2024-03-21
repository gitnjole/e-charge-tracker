<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Currently in development

![View Card Details](public/images/press/view_card.png)

This Laravel application offers a convenient way to manage and track your charging card information.  Key features include:

- Web UI: View your card balance, recent transactions, and other details through a user-friendly web interface.
- API Access: Retrieve card data programmatically using a simple REST API, enabling integration with other applications.

## Current Functionality

- Web Interface: The foundation of the web UI is in place, providing the ability to view basic card details.
- API Endpoint: Fetch basic card information

## API Usage

The syntax for an API call is as follows:
```bash
?card_slug=SLUG&pin=PIN
```
- Replace `SLUG` with the card's unique slug
- Replace `PIN` with the card's unique PIN

### Example response

```json
{
    "id": 15,
    "slug": "R534I15U963",
    "amount_left": "23.8",
    "store": {
        "name": "Watsica, Schowalter and Brekke",
        "address": "409 Nathanial Trail Apt. 658"
    }
}
```

Next on the list:
- [ ] Implement charging sessions table so users can view all past charging sessions from a given card
- [ ] Refactor controllers to adhere to restful principles
- [ ] Optimise database record fetching
- [x] Implement API requests to fetch card details
- [x] Set up database
- [x] Implement web interface

![Cards Table Image](public/images/press/cards_table.png)