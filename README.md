### **Laravel API Demo App**

**Version** 7.0

This app is a demo API app that will give you an idea of the working of APIS in Laravel.

### **Database setup**

Please open your loalhost phpmyadmin / adminer, etc.

Navigate to folder SQL Schema File in this project and you will find a file named `laravel-api-demo.sql`. Import that SQL file in you DBs list

### **Request Format and type**

If you are using POSTMAN. Please follow the below process

1. Set request type to `POST`
2. Set your base request URL
3. Select body and then select x-www-form-urlencoded
4. Below are list of APIs with required fields

### **List of APIs**

PN: My local server was http://127.0.0.1:9090. You may change the settings as per you laravel environment

1. http://127.0.0.1:9090/api/register ( Pre Login )
2. http://127.0.0.1:9090/api/login ( Pre Login )
3. http://127.0.0.1:9090/api/applyLoan ( Post Login )
4. http://127.0.0.1:9090/api/approveLoan ( Post Login )
5. http://127.0.0.1:9090/api/payEMI ( Post Login )