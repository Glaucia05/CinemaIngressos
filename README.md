# CinemaIngressos

Um sistema de compra de ingressos online.
A partir de um cadastro o usuário tem acesso aos filmes em cartaz.

## Funcionalidades esperadas

### Projeto geral
- Acessos de usuário comum e super administrador separados

### Tela inicial

- Botão de login para fazer verificação
- Apresentação dos filmes em cartaz
- Seção de suporte ao cliente

*Suporte ao cliente:*
- FAQ com perguntas comuns (cancelamento, reembolso, formas de pagamento)
- Chat ou formulário de contato 

## Fluxo de compra

1. Usuário escolhe filme → sessão → assentos (mapa visual da sala)
2. Sistema trava o assento temporariamente enquanto o pagamento é processado, evitando overbooking
3. Integração com gateway de pagamento (Stripe, Mercado Pago, PagSeguro)
4. Geração de ingresso digital (QR code) enviado por e-mail e disponível na área do usuário

- **Área do usuário:** histórico de compras, ingressos ativos, cancelamento/reembolso
- **Notificações:** e-mail de confirmação de compra, lembrete antes da sessão
- **Regras de negócio:** política de cancelamento, meia-entrada (validação de documento?), assentos reservados para PCD
- **Segurança:** rate limiting no login, sanitização de dados, conformidade com LGPD
