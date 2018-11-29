# laravel-ecommerce-api
A starter JsonAPI for a Laravel online store

The Database Schema looks like this:

#Product
=========================================
+ id  (PRIMARY)
+ category_id
+ name
+ description
+ image
+ status
+ price

#Category (Type) > eg.: shoes, laptops, TVs, etc
=========================================
+ id (PRIMARY)
+ name
+ slug
 
#ProductAttributes (main) > eg.: color, diagonal, material
=========================================
+ id (PRIMARY)
+ product_id
+ name
+ description
