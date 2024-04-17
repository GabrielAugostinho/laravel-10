<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Rota para exibir todos os usuários
Route::get('/users', [UserController::class, 'index'])->name('index');

// Rota para exibir o formulário de criação de usuário
Route::get('/users/create', [UserController::class, 'create'])->name('create');

// Rota para salvar um novo usuário
Route::post('/users', [UserController::class, 'store'])->name('store');

// Rota para exibir um usuário específico
Route::get('/users/{user}', [UserController::class, 'show'])->name('show');

// Rota para exibir o formulário de edição de usuário
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');

// Rota para atualizar um usuário específico
Route::put('/users/{user}', [UserController::class, 'update'])->name('update');

// Rota para excluir um usuário específico
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('destroy');

