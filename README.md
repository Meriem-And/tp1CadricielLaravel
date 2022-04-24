**Les commandes**

1-	composer create-project --prefer-dist laravel/laravel Maisonneuvee2195180

2-	php artisan make:model Etudiant

3-	php artisan make:model Ville

4-	php artisan make:migration create_tp1_table

php artisan make:factory VilleFactory

php artisan tinker

\App\Models\Ville::factory()->times(15)->create();

5-	php artisan make:factory EtudiantFactory

php artisan tinker

\App\Models\Etudiant::factory()->times(100)->create();

6-	php artisan make:controller VilleController 

php artisan make:controller EtudiantController
