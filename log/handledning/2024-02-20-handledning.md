# Handledning 
## 20/02 w. Ollie-H

**Create list or lists?**
- *The requirement is to have users create 1 list, a watchlist*

**Movie and Watchlist relation**
- Pivot -> many-to-many -> movie_id + watchlist_id

**Models and Migration**
- Foreign 
- One review can be connected to one user and one movie
- Review -> hasOne -> User | User -> hasMany -> Reviews

**Review**
- If a user(user_id) has a review in this movie (movie_id) the button is not clickable

**Delete**
- It is ok to hard-delete. If the user is creating its own reviews it is ok if the user can delete it from showing.
- Hard deletion might be something for Admin user
- Breeze provides a delete-functionality aswell as edit-functionality

**Watchlist**
- Create a new user -> auto create a Watchlist <- one way
- Or... When the user adds a movie, the watchlist is created. Like so 
```php
if(user does not have 'watchlist') {
Create watchlist
}
```