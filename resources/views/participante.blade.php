<html>
    <body>
        <h1>Café da manhã MV :)</h1>
        <table>
            <?php foreach($participantes as $c): ?>
                <tr>
                <td>Colaborador: <?= $c->nome?></td>
                </tr>
                <tr>
                <td>CPF: <?= $c->cpf?></td>
                </tr>
                <tr>
                <td>Prato que será trazido para o café da manhã: <?= $c->prato?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </body>
</html>
