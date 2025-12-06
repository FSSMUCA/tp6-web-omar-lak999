document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('calculator-form');
    const numberAInput = document.getElementById('numberA');
    const numberBInput = document.getElementById('numberB');
    const operatorInput = document.getElementById('operator');
    const errorMessagesDiv = document.getElementById('error-messages');
    const historyList = document.getElementById('history-list');
    const emptyHistoryMessage = document.getElementById('empty-history-message');

    const history = [];

    const validateInputs = (a, b, operator) => {
        let errors = [];

        if (a === null || isNaN(a) || b === null || isNaN(b)) {
            errors.push("Veuillez saisir des valeurs numériques valides pour les deux nombres.");
        }

        if (operator === '/' && b === 0) {
            errors.push("Erreur: La division par zéro est interdite.");
        }

        errorMessagesDiv.innerHTML = '';
        if (errors.length > 0) {
            errors.forEach(error => {
                const p = document.createElement('p');
                p.textContent = `❌ ${error}`;
                errorMessagesDiv.appendChild(p);
            });
            return false;
        }
        
        errorMessagesDiv.innerHTML = '';
        return true;
    };

    const calculate = (a, b, operator) => {
        switch (operator) {
            case '+':
                return a + b;
            case '-':
                return a - b;
            case '*':
                return a * b;
            case '/':
                return a / b;
            default:
                return NaN;
        }
    };

    const updateHistoryDOM = () => {
        historyList.innerHTML = '';
        
        if (history.length === 0) {
            emptyHistoryMessage.style.display = 'block';
            return;
        }

        emptyHistoryMessage.style.display = 'none';

        history.slice().reverse().forEach(operation => {
            const listItem = document.createElement('li');
            listItem.textContent = `${operation.a} ${operation.operator} ${operation.b} = ${operation.result.toFixed(2)}`;
            historyList.appendChild(listItem);
        });
    };

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const a = parseFloat(numberAInput.value);
        const b = parseFloat(numberBInput.value);
        const operator = operatorInput.value;

        if (!validateInputs(a, b, operator)) {
            return;
        }

        const result = calculate(a, b, operator);

        if (isNaN(result)) {
            errorMessagesDiv.innerHTML = '<p>❌ Une erreur inattendue est survenue pendant le calcul.</p>';
            return;
        }

        history.push({
            a: a,
            b: b,
            operator: operator,
            result: result,
            timestamp: new Date()
        });
        
        errorMessagesDiv.innerHTML = `<p style="color: ${getComputedStyle(document.documentElement).getPropertyValue('--secondary-color')}">✅ Résultat : ${a} ${operator} ${b} = ${result.toFixed(2)}</p>`;
        
        updateHistoryDOM();
    });
    
    updateHistoryDOM();
});