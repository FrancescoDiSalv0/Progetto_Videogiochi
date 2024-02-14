<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('videogames', function (Blueprint $table) {
             //!creo la colonna per il VINCOLO DI INTEGRITA' REFERENZIALE
             //! definire il vincolo di integrita' referenziale
             //! prende una chiave esterna FK per collegarsi con la tabella primaria (user_id)  
             $table->unsignedBigInteger("user_id")->after('author')->nullable();

             $table->foreign("user_id")->references("id")->on('users');
             //forma nuova e contratta ma sfrutta al massimo le convenzioni di laravel
             // vi obbliga ad avere una tabella chiamata users e al suo interno un campo di nome id
             // e una classe Eloquent Model di nome User e che sia impostata come PK(primary key) nella migrazione il campo id
             // $table->foreignId('user_id')->nullable()->after('author')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('videogames', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropColumn("user_id");
        });
    }
};
