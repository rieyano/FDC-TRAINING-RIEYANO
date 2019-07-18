select * from address join city on address.city_id = city.city_id
select * from address left join city on address.city_id = city.city_id

select * from address left join city on address.city_id = city.city_id where address_id = 5 or address_id = 10 or address_id = 15;

select * from address right join city on address.city_id = city.city_id where city.city_id = 299

select * from address inner join city on address.city_id = city.city_id