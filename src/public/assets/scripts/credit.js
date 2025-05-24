const nameInput = document.getElementById('name');
const numberInput = document.getElementById('number');
const expiryInput = document.getElementById('expiry');
const cvvInput = document.getElementById('cvv');

nameInput.addEventListener('input', e => {
    document.getElementById('card-name').textContent = e.target.value || 'FULL NAME';
});

numberInput.addEventListener('input', e => {
    let val = e.target.value.replace(/\D/g, '').substring(0, 16);
    val = val.replace(/(.{4})/g, '$1 ').trim();
    e.target.value = val;
    document.getElementById('card-number').textContent = val || '#### #### #### ####';
});

expiryInput.addEventListener('input', e => {
    let val = e.target.value.replace(/\D/g, '').substring(0, 4);
    if (val.length > 2) val = val.slice(0, 2) + '/' + val.slice(2);
    e.target.value = val;
    document.getElementById('card-expiry').textContent = val || 'MM/YY';
});

cvvInput.addEventListener('input', e => {
    let val = e.target.value.replace(/\D/g, '').substring(0, 3);
    e.target.value = val;
});

