{
	"uuid": "hf6r4ergbrdu7i878u-h554wstrfui",
	"sku": "tricou-bumbac-rosu-L",
	"name": "tricou hilfiger",
	"category": "tricouri",
	"description": "lorem ipsum dolor sit amet",
	"in_stock": true,
	"attributes": {
		"size": "L",
		"material": "bumbac",
		"color": "rosu"
	},
	"price": 9.99,
	"stock": 3,
	"tags": []
}

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

#ProductVariants (secondary attributes) > eg.: sizes(M,L,XL), memories, colors(red, blue)
=========================================
+ id (PRIMARY)
+ attribute_id
+ value
+ description

#SKU > eg.: brand-p_id-blue-L, brand-p_id-laptop-15
=========================================
+ id (PRIMARY)
+ product_id
+ sku (= p_id + attr_id? + variant_id?)
+ price
+ stock
+ supplier_code
+ barcode

#SubCategory
=========================================
+ id (PRIMARY)
+ category_id
+ name
+ slug

https://stackoverflow.com/questions/19144200/designing-a-sql-schema-for-a-combination-of-many-to-many-relationship-variation#_=_

https://stackoverflow.com/questions/24923469/modeling-product-variants

https://docs.commercetools.com/http-api-projects-products

https://docs.sylius.com/en/1.2/api/products.html

