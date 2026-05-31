        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>

        <body>

            <h1>Calculadora em php </h1>
            <form action="Calculo.php" method="post">
                <legend>
                    <input type="number" name="n1"><br>

                    <input type="number" name="n2"><br><br>

                    <p> Operação </p> <select name="operadores">
                        <option value="somar">Somar</option>
                        <option value="subtrair">Subtrair</option>
                        <option value="multiplicar">Multiplicar</option>
                        <option value="dividir">Dividir</option>
                    </select> <br><br>
                    <input type="submit" value="Calcular">

                </legend>


            </form>



        </body>

        </html>