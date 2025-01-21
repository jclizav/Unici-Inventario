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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });

        Schema::create('InventarioGeneral', function (Blueprint $table) {
            $table->id(); // id se define automáticamente como un campo autoincrementable de tipo bigInteger.
            $table->string('CodigoDeBarras');
            $table->string('IdNomenclatura');
            $table->string('Campus');
            $table->string('Area');
            $table->string('ResponsableAreas');
            $table->string('ResponsableBien');
            $table->string('Bien');
            $table->string('Marca');
            $table->string('Modelo');
            $table->string('Color');
            $table->string('NumSerie');
            $table->float('Sat');
            $table->date('Fecha');
            $table->float('Precio');
            $table->string('CodigoCFiscal');
            $table->string('Estado');
            $table->text('Descripcion');
            $table->string('Factura');
            $table->string('Imagen');
            $table->string('Medida');
            $table->text('Observaciones');
            $table->integer('Cantidad');
            $table->integer('TI');
            $table->timestamps(); // Opcional, si deseas tener las columnas `created_at` y `updated_at`.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
