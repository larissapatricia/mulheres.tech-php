//a conta tem?
//número conta, titular, saldo, extrato
//-------------------------------------
//Oque eu posso fazer na conta?
//sacar, depositar, extrato, transferir

//ideia de como iniciar uma classe:
class Conta{ //essa variável é do tipo conta. Funçao dentro de classe é chamado método.
    constructor(titular, numConta, saldo=0){ //método construtor
        //this = palavra reservada p/indicar que a variável/função pertence a classe em questão.
        this.titular = titular
        this.numConta = numConta
        this.saldo = saldo
        this.extrato = []
    }
    depositar(valor){
        if(valor > 0){
            this.saldo = this.saldo + valor
            console.log("Depósito realizado com sucesso!")
        }
    }
    realizarSaque(valor){
        if(valor <= 0){
            console.log("Digite um valor válido")
        }
        else if(valor > this.saldo){
            console.log("Saldo insuficiente.")
        }
        else{
            this.saldo = this.saldo - valor
            console.log("Saque realizado.")
        }
    }
    transferencia(valor, conta){
        console.log('Início da transferência')
        this.realizarSaque(valor)
        conta.depositar(valor)
        console.log('Transferência realizada.')
    }

}

conta1 = new Conta('Vanessa', '10010', 100)
console.log(conta1.saldo)
conta1.depositar(50)
console.log(conta1.saldo)
conta1.realizarSaque(50)

conta2 = new Conta('Senac', '10011', 500) //nova conta p/testar a transferência.
conta2.transferencia(200, conta1)

console.log(conta1.saldo)
