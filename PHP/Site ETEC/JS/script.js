const form = document.getElementById('contactForm');
const successBanner = document.getElementById('successBanner');

const fields = {
  nome: document.getElementById('nome'),
  email: document.getElementById('email'),
  telefone: document.getElementById('telefone'),
  assunto: document.getElementById('assunto'),
  mensagem: document.getElementById('mensagem')
};

const MAX_MSG = 500;

// Máscara de telefone em tempo real: (XX) XXXXX-XXXX ou (XX) XXXX-XXXX
fields.telefone.addEventListener('input', () => {
  let v = fields.telefone.value.replace(/\D/g, '').slice(0, 11);
  if (v.length > 10) {
    v = v.replace(/^(\d{2})(\d{5})(\d{0,4}).*/, '($1) $2-$3');
  } else if (v.length > 5) {
    v = v.replace(/^(\d{2})(\d{4})(\d{0,4}).*/, '($1) $2-$3');
  } else if (v.length > 2) {
    v = v.replace(/^(\d{2})(\d{0,5}).*/, '($1) $2');
  } else if (v.length > 0) {
    v = v.replace(/^(\d*)/, '($1');
  }
  fields.telefone.value = v;
});

// Contador de caracteres da mensagem
fields.mensagem.addEventListener('input', () => {
  const len = fields.mensagem.value.length;
  document.getElementById('charCount').textContent = `${len}/${MAX_MSG}`;
  if (len > MAX_MSG) {
    fields.mensagem.value = fields.mensagem.value.slice(0, MAX_MSG);
  }
});

function setError(fieldName, message) {
  const fieldDiv = document.getElementById(`field-${fieldName}`);
  const errorSpan = document.getElementById(`error-${fieldName}`);
  if (message) {
    fieldDiv.classList.add('is-invalid');
    errorSpan.textContent = message;
  } else {
    fieldDiv.classList.remove('is-invalid');
    errorSpan.textContent = '';
  }
}

function validateNome() {
  const val = fields.nome.value.trim();
  if (!val) return setError('nome', 'Digite seu nome completo.'), false;
  if (val.length < 5) return setError('nome', 'O nome parece muito curto.'), false;
  if (!val.includes(' ')) return setError('nome', 'Digite nome e sobrenome.'), false;
  setError('nome', '');
  return true;
}

function validateEmail() {
  const val = fields.email.value.trim();
  const regex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
  if (!val) return setError('email', 'Digite seu e-mail.'), false;
  if (!regex.test(val)) return setError('email', 'Digite um e-mail válido terminando em @gmail.com.'), false;
  setError('email', '');
  return true;
}

function validateTelefone() {
  const digits = fields.telefone.value.replace(/\D/g, '');
  if (!digits) return setError('telefone', 'Digite seu telefone.'), false;
  if (digits.length < 10 || digits.length > 11) return setError('telefone', 'Telefone deve ter DDD + número (10 ou 11 dígitos).'), false;
  setError('telefone', '');
  return true;
}

function validateAssunto() {
  if (!fields.assunto.value) return setError('assunto', 'Selecione um assunto.'), false;
  setError('assunto', '');
  return true;
}

function validateMensagem() {
  const val = fields.mensagem.value.trim();
  if (!val) return setError('mensagem', 'Escreva uma mensagem.'), false;
  if (val.length < 10) return setError('mensagem', 'A mensagem precisa ter pelo menos 10 caracteres.'), false;
  setError('mensagem', '');
  return true;
}

// Validação em tempo real ao perder o foco
fields.nome.addEventListener('blur', validateNome);
fields.email.addEventListener('blur', validateEmail);
fields.telefone.addEventListener('blur', validateTelefone);
fields.assunto.addEventListener('change', validateAssunto);
fields.mensagem.addEventListener('blur', validateMensagem);

form.addEventListener('submit', function (e) {
  e.preventDefault();
  successBanner.classList.remove('show');

  const validations = [
    validateNome(),
    validateEmail(),
    validateTelefone(),
    validateAssunto(),
    validateMensagem()
  ];

  const allValid = validations.every(Boolean);

  if (allValid) {
    successBanner.classList.add('show');
    // Aqui você poderia enviar os dados para um servidor com fetch().
    console.log('Dados do formulário:', {
      nome: fields.nome.value,
      email: fields.email.value,
      telefone: fields.telefone.value,
      assunto: fields.assunto.value,
      mensagem: fields.mensagem.value
    });
  } else {
    successBanner.classList.remove('show');
    // Rola até o primeiro campo com erro
    const firstInvalid = document.querySelector('.field.is-invalid');
    if (firstInvalid) firstInvalid.scrollIntoView({ behavior: 'smooth', block: 'center' });
  }
});
