

-- Make bestelling
SELECT product.naam, klanten.naam
FROM bieding_product
INNER JOIN product ON product.id = bieding_product.product_id
INNER JOIN klanten ON klanten.id = bieding_product.klanten_id

-- Get gewonnen klant
SELECT product.naam, klanten.naam
FROM bieding_product
INNER JOIN product ON product.id = bieding_product.product_id
INNER JOIN klanten ON klanten.id = bieding_product.klanten_id
where klanten.klant_id = 12
ORDER BY 


-- Bieding -> id, klant_id en product_id 

-- klant kan meerdere bestellingen hebben, Maar een bestelling niet meerdere klanten
-- een artikel kan niet 