package com.example.cadastromobileproduto

import android.os.Bundle
import androidx.activity.ComponentActivity
import androidx.activity.compose.setContent
import androidx.activity.enableEdgeToEdge
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.lazy.LazyColumn
import androidx.compose.foundation.lazy.items
import androidx.compose.material3.*
import androidx.compose.runtime.*
import androidx.compose.ui.Modifier
import androidx.compose.ui.unit.dp
import com.example.cadastromobileproduto.ui.theme.CadastroMobileProdutoTheme

data class Produto(
    val nome: String,
    val numeroCamisa: Int,
    val codigoVenda: String,
    val preco: Double,
    val quantidade: Int
)

class MainActivity : ComponentActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)

        enableEdgeToEdge()

        setContent {
            CadastroMobileProdutoTheme {
                TelaCadastro()
            }
        }
    }
}

@Composable
fun TelaCadastro() {

    var nome by remember { mutableStateOf("") }
    var numeroCamisa by remember { mutableStateOf("") }
    var codigoVenda by remember { mutableStateOf("") }
    var preco by remember { mutableStateOf("") }
    var quantidade by remember { mutableStateOf("") }

    val produtos = remember {
        mutableStateListOf<Produto>()
    }

    Column(
        modifier = Modifier
            .fillMaxSize()
            .padding(20.dp)
    ) {

        Text(
            text = "Cadastro de Camisas",
            style = MaterialTheme.typography.headlineMedium
        )

        Spacer(modifier = Modifier.height(20.dp))

        OutlinedTextField(
            value = nome,
            onValueChange = { nome = it },
            label = { Text("Nome da Camisa") },
            modifier = Modifier.fillMaxWidth()
        )

        Spacer(modifier = Modifier.height(10.dp))

        OutlinedTextField(
            value = numeroCamisa,
            onValueChange = { numeroCamisa = it },
            label = { Text("Número da Camisa") },
            modifier = Modifier.fillMaxWidth()
        )

        Spacer(modifier = Modifier.height(10.dp))

        OutlinedTextField(
            value = codigoVenda,
            onValueChange = { codigoVenda = it },
            label = { Text("Código de Venda") },
            modifier = Modifier.fillMaxWidth()
        )

        Spacer(modifier = Modifier.height(10.dp))

        OutlinedTextField(
            value = preco,
            onValueChange = { preco = it },
            label = { Text("Preço") },
            modifier = Modifier.fillMaxWidth()
        )

        Spacer(modifier = Modifier.height(10.dp))

        OutlinedTextField(
            value = quantidade,
            onValueChange = { quantidade = it },
            label = { Text("Quantidade") },
            modifier = Modifier.fillMaxWidth()
        )

        Spacer(modifier = Modifier.height(20.dp))

        Button(
            onClick = {

                if (nome.isNotBlank()) {

                    produtos.add(
                        Produto(
                            nome = nome,
                            numeroCamisa = numeroCamisa.toIntOrNull() ?: 0,
                            codigoVenda = codigoVenda,
                            preco = preco.toDoubleOrNull() ?: 0.0,
                            quantidade = quantidade.toIntOrNull() ?: 0
                        )
                    )

                    nome = ""
                    numeroCamisa = ""
                    codigoVenda = ""
                    preco = ""
                    quantidade = ""
                }

            },
            modifier = Modifier.fillMaxWidth()
        ) {
            Text("Cadastrar Camisa")
        }

        Spacer(modifier = Modifier.height(20.dp))

        Text(
            text = "Camisas Cadastradas",
            style = MaterialTheme.typography.titleLarge
        )

        Spacer(modifier = Modifier.height(10.dp))

        LazyColumn {

            items(produtos) { produto ->

                Card(
                    modifier = Modifier
                        .fillMaxWidth()
                        .padding(vertical = 5.dp)
                ) {

                    Column(
                        modifier = Modifier.padding(15.dp)
                    ) {

                        Text(
                            text = produto.nome,
                            style = MaterialTheme.typography.titleMedium
                        )

                        Text("Número: ${produto.numeroCamisa}")
                        Text("Código de Venda: ${produto.codigoVenda}")
                        Text("Preço: R$ ${produto.preco}")
                        Text("Quantidade: ${produto.quantidade}")

                    }

                }

            }

        }

    }
}