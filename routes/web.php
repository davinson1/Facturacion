<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Auth\LoginController@index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::middleware(['auth'])->group(function(){


  // Rutas para usuarios
  Route::get('/perfil_usuarios/{user}', 'UsuariosController@perfil')->name('perfil_usuarios');
  Route::post('/actualizar_perfil/{user}', 'UsuariosController@editarPerfil')->name('actualizar_perfil');

  Route::get('/usuarios', 'UsuariosController@index')->name('usuarios')->middleware('can:navegar.usuario');
  Route::get('/listar_usuarios', 'UsuariosController@ListarUsuarios')->middleware('can:navegar.usuario');
  Route::get('/formulario_usuarios', 'UsuariosController@create')->name('formulario_usuarios')->middleware('can:crear.usuario');
  Route::post('/crear_usuarios', 'UsuariosController@store')->name('crear_usuarios')->middleware('can:crear.usuario');
  Route::get('/editar_usuarios/{user}', 'UsuariosController@edit')->name('editar_usuarios')->middleware('can:editar.usuario');
  Route::post('/actualizar_usuarios/{usuario}', 'UsuariosController@update')->name('actualizar_usuarios')->middleware('can:editar.usuario');
  Route::delete('/usuarios_eliminar/{idUser}', 'UsuariosController@destroy')->name('usuarios_eliminar')->middleware('can:eliminar.usuario');

  // Rutas para roles
  Route::get('/roles', 'RolesController@index')->name('roles')->middleware('can:navegar.rol');
  Route::get('/listar_roles', 'RolesController@listarRoles')->middleware('can:navegar.rol');
  Route::post('/roles_crear', 'RolesController@store')->name('roles_crear')->middleware('can:crear.rol');
  Route::get('/roles_editar/{rol}', 'RolesController@edit')->name('roles_editar')->middleware('can:editar.rol');
  Route::put('/roles_actualizar/{rol}', 'RolesController@update')->name('roles_actualizar')->middleware('can:editar.rol');
  Route::delete('/roles_eliminar/{rol}', 'RolesController@destroy')->name('roles_eliminar')->middleware('can:eliminar.rol');

  // Rutas para tipo de documentos
  Route::get('/tipo_documento', 'TipoDocumentoController@index')->name('tipo_documento')->middleware('can:navegar.tipo.documento');
  Route::get('/tabla_tipo_documento', 'TipoDocumentoController@listarTipoDocumento')->middleware('can:navegar.tipo.documento');
  Route::post('/tipo_documento_crear', 'TipoDocumentoController@store')->name('tipo_documento_crear')->middleware('can:crear.tipo.documento');
  Route::post('/tipo_documento_editar', 'TipoDocumentoController@update')->name('tipo_documento_editar')->middleware('can:editar.tipo.documento');
  Route::post('/tipo_documento_eliminar', 'TipoDocumentoController@destroy')->name('tipo_documento_eliminar')->middleware('can:eliminar.tipo.documento');

  // Rutas para pais
  Route::get('/pais', 'PaisController@index')->name('pais')->middleware('can:navegar.pais');
  Route::get('/listar_pais', 'PaisController@listarPais')->middleware('can:navegar.pais');
  Route::post('/pais_crear', 'PaisController@store')->name('pais_crear')->middleware('can:crear.pais');
  Route::post('/pais_editar', 'PaisController@update')->name('pais_editar')->middleware('can:editar.pais');
  Route::post('/paises_eliminar', 'PaisController@destroy')->name('paises_eliminar')->middleware('can:eliminar.pais');

  //rutas para departamentos
  Route::get('/departamentos', 'DepartamentosController@index')->name('departamentos')->middleware('can:navegar.departamentoo');
  Route::get('/listar_departamentos', 'DepartamentosController@ListarDepartamentos')->middleware('can:navegar.departamento');
  Route::post('/departamentos_crear', 'DepartamentosController@store')->name('departamentos_crear')->middleware('can:crear.departamento');
  Route::post('/departamentos_editar', 'DepartamentosController@update')->name('departamentos_editar')->middleware('can:editar.departamento');
  Route::post('/departamentos_eliminar', 'DepartamentosController@destroy')->name('departamentos_eliminar')->middleware('can:eliminar.departamento');

  // Rutas para municipios
  Route::get('/municipios', 'MunicipiosController@index')->name('municipios')->middleware('can:navegar.municipio');
  Route::get('/listar_municipios', 'MunicipiosController@listarMunicipios')->middleware('can:navegar.municipio');
  Route::post('/municipios_crear', 'MunicipiosController@store')->name('municipios_crear')->middleware('can:crear.municipio');
  Route::post('/municipios_editar', 'MunicipiosController@update')->name('municipios_editar')->middleware('can:editar.municipio');
  Route::post('/municipios_eliminar', 'MunicipiosController@destroy')->name('municipios_eliminar')->middleware('can:eliminar.municipio');

  // Rutas para articulos
  Route::get('/articulos', 'ArticulosController@index')->name('articulos')->middleware('can:navegar.articulos');
  // Rutas para formas de pago
  Route::get('/formas_pago', 'FormasPagoController@index')->name('formas_pago')->middleware('can:navegar.formas.pagos');
  // Rutas para iva
  Route::get('/iva', 'IvaController@index')->name('iva')->middleware('can:navegar.iva');
  // Rutas para porcentaje
  Route::get('/porcentaje', 'PorcentajeController@index')->name('porcentaje')->middleware('can:navegar.porcentaje');
  // Rutas para productos
  Route::get('/productos', 'ProductosController@index')->name('productos')->middleware('can:navegar.productos');
  // Rutas para tipos de factura
  Route::get('/tipo_factura', 'TipoFacturaController@index')->name('tipo_factura')->middleware('can:navegar.tipos.facturas');
  Route::get('/listar_tipo_factura', 'TipoFacturaController@listarTiposFacturas')->middleware('can:navegar.tipos.facturas');
  Route::post('/tipo_factura_crear', 'TipoFacturaController@store')->name('tipo_factura_crear')->middleware('can:crear.tipos.facturas');
  Route::put('/tipo_factura_editar/{idTipoFactura}', 'TipoFacturaController@update')->name('tipo_factura_editar')->middleware('can:editar.tipos.facturas');
  Route::delete('/tipo_factura_eliminar/{idTipoFactura}', 'TipoFacturaController@destroy')->name('tipo_factura_eliminar')->middleware('can:eliminar.tipos.facturas');

  // Rutas para tipos tributario
  Route::get('/tipo_tributario', 'TipoTributarioController@index')->name('tipo_tributario')->middleware('can:navegar.tipos.tributario');
  
});

