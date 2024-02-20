**FAT** = Model & Table
_ittalic_ = Key
**_ITTALIC_** = Foreign Key

---

1. **USER**
   [*id*, username, email, password, role]

   HasMany -> **REVIEW** <- BelongsTo

   `a user can write multiple reviews`

   HasOne -> **WATCHLIST** <- BelongsTo

   `a user can have one watchlist`

---

2. **GENRE**
   [*id*, name]

   BelongsToMany -> **MOVIEs** <- BelongsToMany

   `a genre can belong to multiple movies`

---

3. **MOVIE**
   [*id*, title, description, release_date]

   BelongsToMany -> **WATCHLISTs** <- HasMany

   `a movie can be in multiple watchlists`

---

4. PIVOT for **GENRE** and **MOVIE**

   Table name: **GENRE_MOVIE**

   [*id*, ***movie_id***, ***genre_id***]

---

5. **REVIEW**
   [*id*, ***USER_ID***, ***MOVIE_ID***, rating, comment]

   BelongsTo -> **USER** <- HasMany

   `a review can have one author(user)`

   BelongsTo -> **MOVIE** <- HasMany

   `this review can only excist on this movie`

---

6. **WATCHLIST**
   [*id*, ***USER_ID***]

   BelongsTo -> **USER** <- HasOne

   `this watchlist can have this one user`

---

7. PIVOT for **MOVIE** and **WATCHLIST**

   Table name: **MOVIE_WATCHLIST**

   [*id*, ***MOVIE_ID***, ***WATCHLIST_ID***]

---
