<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>
<p align="center"><img src="https://vuejs.org/images/logo.png" width="150"></p>
<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## This is a Laravel and Vue example project
> N.B: Click the right setup instruction that you need and follow all the commands.
## Setup  instructions:
<details>
<summary>
    Setup and use this existing repository:
</summary>

1. Clone or <a href="https://github.com/hasanuzzamanbe/laravel-vue-example/archive/master.zip">download this </a> git repository. 
> Run on command:
2. Install composer run $` composer install`
3. Create .env $` cp .env.example .env`
4. Generate Key $` php artisan key:generate`
5. Install node $` npm i`

## Run server:
6. Run node server $` npm run watch`
7. Run PHP server $` php artisan serve`

</details>


<details>
<summary>
 Or  Create a new Laravel + Vue fresh Project:
</summary>

1. install laravel globaly:

    `composer global require laravel/installer`

2. create project

    `composer create-project --prefer-dist laravel/laravel my-project`

3. after create run server

    `php artisan serve`
4. Db setup to .env file

    set Db name, user, pass, change app name

5. Make a model to create DB table (will be in database/migrations)

    `php artisan make:model my-table-name -m`

6. Write you DB up query on (database/migrations/*my-table-name)
  Example bellow:

        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('completed')->default(false);
            $table->timestamp('completed_at')->nullable();
            $table->timestamps();
        });

7. Create table from models

    `php artisan migrate`

8. Make Controller (will be in app/Http/Controllers)

    `php artisan make:controller ItemController --resource`

9. Setup a route (on Routes/)

    Example:
    // import first then write the route
    use App\Http\Controllers\ItemController;
    Route::get('/items', [ItemController::class, 'index']);

    Route::prefix('item')->group(function () {
        Route::post('/store', [ItemController::class, 'store']);
        Route::put('/{id}', [ItemController::class, 'update']);
        Route::delete('/{id}', [ItemController::class, 'destroy']);
    });

10. Write query to the itemcontroller in Controller

    Example:
        public function store(Request $request)
        {
            $newItem = new Item();
            $newItem->name = $request->item['name'];
            $newItem->save();
            return $newItem;
        }
        
 ## setup Vue
         $ npm i
         $ npm i vue
10. Create a vue app on (resource/vue/app.vue)
    And setup on app.js like this
    Example: 
    ```
    require('./bootstrap');
    
    import vue from 'vue';
    
    import App from '../vue/app.vue';

    const app = new vue({
        el: '#app',
        components: { App }
    })
    ```

11. open welcome.blade.php file and setup like this

    ```
    <body class="antialiased">
        <div id="app">
            <app></app>
        </div>
    </body>"
    
    <script src="{{ mix('js/app.js') }}"></script>
    ```

12. use webpack.mix using vue
Example:
```
	mix.js('resources/js/app.js', 'public/js').vue()
    		.postCss('resources/css/app.css', 'public/css', [
        			//
    		]);
```
All done :)

Setup your Vue files on resource directory like this example project.

visit laravel <a href="https://laravel.com/docs/7.x">official documentation</a>  for details.
</details>


## Some suggestions for beginner's:

* Write Vue file's on resource directory.
* Check package.json file to see installed packages
> Installed packages (npm):
* element-ui
* vue-router


## Help and support:
For any kind of suggestion and help, you can text me © <a href="https://www.hasanuzzaman.com">hasanuzzaman.com</a>


