Schema::create('personas', function (Blueprint $table) {
    $table->id();
    $table->string('nombre');
    $table->string('apellido');
    $table->string('telefono');
    $table->string('id');
    $table->timestamps();
});