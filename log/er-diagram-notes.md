# ER DIagram Notes
## Users
- *user_id* :  identification for user
- *username* : name
- *email* : email adress
- *password* : user password
- *role* : what privileges does the user have(admin or user) 

## Lists
- *list_id* : user-created list identification
- *user_id* : user identification
- *title_id* : movie title
- *watchlist* : bool (saved to watchlist or not?)

## Movies
- *title_id* : movie identification
- *description* : movie description
- *release_date* : date of initial release
- *genre_id* : movie genre 
- *review_id* : (if possible) overall rating for  a specific movie

## Reviews
- *review_id* : review identification
- *user-id* : user identification for specific reviews
- *title_id* : movie title
- *rating* : user rating for the specific review
- *comment* : user comment for the specific review

## Genres
- *genre_id* : identification for specific genre
- *name* : specific genre
- *list_id* : (if possible) the user-created list