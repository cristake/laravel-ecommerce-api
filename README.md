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

#Category > eg.: shoes, laptops, TVs, etc
=========================================
+ id (PRIMARY)
+ name
+ slug


#CategoryLists > eg.: business shoes, loafers, etc
=========================================
+ id (PRIMARY)
+ category_id
+ name
+ slug

#ProductAttributes > eg.: color, material
=========================================
+ id (PRIMARY)
+ product_id
+ name
+ description
