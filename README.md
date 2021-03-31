<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/AironDev/Lnaid/blob/main/public/assets/img/demos/landing.png"></a></p>

## About Lnaid

Lnaid provides a robust system through which students can reach out to Individuals, NGOs, Companies and Government Agencies for help on issues that borders on their education. We believe, there are kind hearted individuals who would love to give back to the society or more specifically their almamata by making contributions towards education.

We ensure only geniune requests are published, every support offered goes directly to the beneficiary and we enforce transperancy via a #thankYou systeme

# How to contribute to Lnaid


### Setup
Make sure you have `composer and xampp/wamp` installed in your machine before you continue.

### Install dependencie in laravel. 
```
composer install
```

### Change your database
#### Open .env file and change you database name
```
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=awesome
DB_USERNAME=root
DB_PASSWORD=

```

### Run `php artisan migrate`, to update your database, and to fill your database with dummy data run `php artisan db:seed`. 

### Running the Applcation
Run `php artisan serve` to start the app server.  

### Deployment Details

#### Url 
[Lnaid](http://34.122.40.49/)

#### Testing Account
##### Student
- Email: student@test-lnaid.com
- Password: 12345678

##### Sponsor
- Email: sponsor@test-lnaid.com
- Password: 12345678

##### Admin
- Email: admin@test-lnaid.com
- Password: 12345678

#### Testing Card for Donation

##### MasterCard PIN authentication
- Card number: 5531 8866 5214 2950
- Cvv: 564
- Expiry: 09/32
- Pin: 3310
- OTP: 12345

##### Visa Card 3D-Secure authentication (VBVSECURECODE)
- Card number: 4187 4274 1556 4246
- cvv: 828
- Expiry: 09/32
- Pin: 3310
- OTP: 12345

##### MasterCard 3DSecure authentication (VBVSECURECODE)
- Card number: 5438 8980 1456 0229
- cvv: 564
- Expiry: 10/31
- Pin: 3310
- OTP: 12345

##### Verve Card (PIN)
- Card number: 5061 4604 1012 0223 210
- cvv: 780
- Expiry Month: 12
- Expiry Year: 31
- Pin: 3310
- OTP: 12345



