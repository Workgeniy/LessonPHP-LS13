получить все посты

POST method: GET: localhost:8080/api/post  

cURL: 
    --location 'localhost:8080/api/post' \

    --header 'Accept: aplication/json' \
    --header 'Authorization: Bearer 2|ZLzBcAtgPHHffraTU9JW8UZdNTA9BLt6EkbGQpmUcdfa0d1a'

создать новый пост

POST method: POST : localhost:8080/api/post/create?title=create title&text=create text&mark=3


cURL: 
    --location --request POST 'localhost:8080/api/post/create?title=create%20title&text=create%20text&mark=3' \

    --header 'Authorization: Bearer 2|ZLzBcAtgPHHffraTU9JW8UZdNTA9BLt6EkbGQpmUcdfa0d1a'

  создать новый коммент

comment method: POST: localhost:8080/api/comment/create?text=what! It's wonderful!&like=10&dislike=0&post_id=1


cURL:   
    --location --request POST 'localhost:8080/api/comment/create?         text=OMG!%20It%27s%20wonderful!&like=10&dislike=0&post_id=1' \

    --header 'Authorization: Bearer 2|ZLzBcAtgPHHffraTU9JW8UZdNTA9BLt6EkbGQpmUcdfa0d1a'

получить все комменты

comment method: GET :  localhost:8080/api/comment


cURL:  
    --location 'localhost:8080/api/comment' \

    --header 'Authorization: Bearer 2|ZLzBcAtgPHHffraTU9JW8UZdNTA9BLt6EkbGQpmUcdfa0d1a'

