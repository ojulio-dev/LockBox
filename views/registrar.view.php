<?php $validacoes = flash()->get('validacoes'); ?>

<div class="grid grid-cols-2">

    <div class="hero min-h-screen flex ml-40">
        <div class="hero-content -mt-20">
            <div>
                <p class="py-2 text-xl">Bem Vindo ao</p>
                <h1 class="text-6xl font-bold">LockBox</h1>
                <p class="py-2 pb-4 text-xl">Onde você guarda <span class="italic">tudo</span> com segurança</p>
            </div>
        </div>
    </div>

    <div class="bg-white hero mr-40 min-h-screen text-black">
        <div class="hero-content -mt-20">
            <form method="POST" action="/registrar">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Crie a sua conta</div>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Nome</span>
                            </div>

                            <input name="nome" type="text" class="input input-bordered w-full max-w-xs bg-white" value="<?= old('nome') ?>" />

                            <?php if (isset($validacoes['nome'])): ?>
                                <div class="mt-1 text-xs text-error"><?= $validacoes['nome'][0] ?></div>
                            <?php endif; ?>
                        </label>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">E-mail</span>
                            </div>

                            <input name="email" type="text" class="input input-bordered w-full max-w-xs bg-white" value="<?= old('email') ?>" />

                            <?php if (isset($validacoes['email'])): ?>
                                <div class="mt-1 text-xs text-error"><?= $validacoes['email'][0] ?></div>
                            <?php endif; ?>
                        </label>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Confirme seu Email</span>
                            </div>

                            <input name="email_confirmacao" type="text" class="input input-bordered w-full max-w-xs bg-white" />
                        </label>

                        <label class="form-control">
                            <div class="label">
                                <span class="label-text text-black">Senha</span>
                            </div>

                            <input name="senha" type="password" class="input input-bordered w-full max-w-xs bg-white" />

                            <?php if (isset($validacoes['senha'])): ?>
                                <div class="mt-1 text-xs text-error"><?= $validacoes['senha'][0] ?></div>
                            <?php endif; ?>
                        </label>

                        <div class="card-actions">
                            <button class="btn btn-primary btn-block">Registrar</button>
                            <a href="/login" class="btn btn-link">Já tenho uma conta</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>