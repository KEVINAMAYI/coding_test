# Coding Test Project Setup

### To setup this project successfully, you need

- **[Composer For PHP Dependencies](https://getcomposer.org/)**
- **[PHP 8.1 Minimun requirement for Laravel 10](https://www.apachefriends.org/download.html)**
- **[MYSQL For Managing the database](https://www.apachefriends.org/download.html/)**
- **[NodeJS for installing VueJS dependencies](https://nodejs.org/en/)**




## 1. Clone the Project Repository

- ### Clone the project Repository by Running this command in a folder you have created.


![Cloning the Project](/intsallation_files/coding_test_1.PNG "Cloning the Project").

## 2. Install Dependencies

- ### Once the project has been cloned, cd into the project and run.

```
composer install 
```

![Cloning the Project](/intsallation_files/coding_test_2.PNG "Cloning the Project").


## 3. Configure Database and Run Migrations

- Rename .env-example to .env
- Add database details to the .env ( Make sure to create the dabase or you can create it during migration ).
- Run migration to migrate the tables 

![Cloning the Project](/intsallation_files/coding_test_4.PNG "Cloning the Project").
![Cloning the Project](/intsallation_files/coding_test_5.PNG "Cloning the Project").
![Cloning the Project](/intsallation_files/coding_test_6.PNG "Cloning the Project").


## 4. Run Test

- ### Run tests which will insert some data in the database and test all functionalities for the APIs. In our case it will ensure the create, update, delete, show and index methods are working seemlessly.

```
php artisan test
```
![Cloning the Project](/intsallation_files/coding_test_7.PNG "Cloning the Project").


## 4. Start Backend Server
- Start the serve by running the command below. Don't close the serve as this will be required to be used by the frontend server.

```
php artisan serve
```
![Cloning the Project](/intsallation_files/coding_test_8.PNG "Cloning the Project").


## 5. Install Dependencies for frontend
- CD into vue-rest-api inside your project and run npm install to intall frontend dependencies.

```
npm install
```
![Cloning the Project](/intsallation_files/coding_test_9.PNG "Cloning the Project").


## 6. Start Frontend Server
- Start your Frontend server by running npm run dev.

```
npm run dev
```
![Cloning the Project](/intsallation_files/coding_test_10.PNG "Cloning the Project").


## 6. Accessing the Website
- ### The frontend runs on port 3000, you can now access it on the browser at localhost:3000

![Cloning the Project](/intsallation_files/coding_test_11.PNG "Cloning the Project").

- #### Create a new Product by Clicking on the Create Product Option

![Cloning the Project](/intsallation_files/coding_test_12.PNG "Cloning the Project").

![Cloning the Project](/intsallation_files/coding_test_13.PNG "Cloning the Project").

- #### Edit the created Product by Clicking on the Edit Option

![Cloning the Project](/intsallation_files/coding_test_14.PNG "Cloning the Project").

- #### Delete the Product by clicking on deleted option

![Cloning the Project](/intsallation_files/coding_test_15.PNG "Cloning the Project").

![Cloning the Project](/intsallation_files/coding_test_16.PNG "Cloning the Project").



## 7. Run Tests
- You can run the test by running this

```
npm run test:unit
```

![Cloning the Project](/intsallation_files/coding_test_17.PNG "Cloning the Project").
![Cloning the Project](/intsallation_files/coding_test_18.PNG "Cloning the Project").



