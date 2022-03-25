<p align="center"><img src="https://raw.githubusercontent.com/snakee0101/shop/main/screenshot.png" width="800"></p>

## About this website

This this a test e-commerce website I am building when learning laravel/php - so the site is based on laravel and it is still in development. It has a lot of capabilities that typical e-commerce website has, that include (capital letters in the words below mean that there is corresponding Eloquent Model):

- shopping cart (based on darryldecode/cart) management with total and subtotal calculation (located in /cart route).
- Product belongs to Category and has its own Characteristics (that are set on Category basis). Also Product has Reviews and Questions, that have Replies and could be Voted.
- Category can have subcategories.
- If you consider Question or Review offensive you can Report it.
- Product Set consists of 2 products and could be bought. List of Product Sets that current Product belongs to is shown on the Product description page.
- Percent Discounts or Discounts With Fixed Price (per Product or Product Set), that may have expiration date and could be activated with a coupon code - to do that discounts were implemented as a separate classes in app\Discounts. Coupon code is applied in shopping cart.
- Videos and Photos could be attached to the Product. Photos are shown in the slider on a product description page.
- Products could be added to the Wishlist (works when the user is logged in) (located in /wishlist). You can have several named wishlists which can be renamed, deleted or set as default. Wishlist calculates the total and adds selected products to the Cart. Selected products could be deleted from wishlist or moved to another wishlist. You can expose the wishlist to the public - it will have a public URL. When you add Products to Wishlist - in fact you add them to default Wishlist.

Default user login credentials: Email - "test@gmail.com"; Password - "password".

There is admin panel (located in /admin-panel), where all products, products sets, ... are managed.
Also I have DB Schema (written with Mysql Workbench) * it is located in file "shop db schema.mwb".

## Future plans

- product Badges that could be assigned by admin
- user dashboard
- admin login
- moderator role
- admin and moderator privilege management
- advertisement banners, that could be placed by admin
- currency converter (you will see the Product price in specific currency)
- payments (maybe with paypal)
- global search
- category page search (will be powered by Meilisearch) 
- ability to ban users after 3 warnings
- notification system
- ability to contact admin through form
- News
- Newsletter subscription
- Product color selection
- product/set quantity check when adding to the cart
- predefined queries, shown on index page as "filter groups" - "most bought", "most favorited", "most questioned", "most bought in category X", "newest"

### Technology stack

- Laravel
- Vue
- MySQL
- Meilisearch (in future)
- PhpUnit
- PHP GD extension is required

## Installation

1. clone the repository
2. cd into project folder
3. open terminal and run "composer install"
4. run "npm install" 
5. run "php artisan key:generate"
6. change your DB config in .env file
7. run "php artisan migrate"
8. run "php artisan db:seed"
9. run "php artisan storage:link"
10. run a website - "php artisan serve", "npm run watch"

## Issues
For some reason dataTables plugin doesn't work in chrome - so view this site in firefox.

Images in ProductCardComponent (Vue) are loading a lot longer in firefox than in chrome. 

Number of DB queries executed and models loaded are bigger than expected (according to LaravelDebugBar).
