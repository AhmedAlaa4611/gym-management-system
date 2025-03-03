    document.getElementById('bmiForm').addEventListener('submit', function(e) {
        e.preventDefault(); 

        const height = parseFloat(document.getElementById('height').value) / 100;
        const weight = parseFloat(document.getElementById('weight').value);
        const age = parseInt(document.getElementById('age').value);

        if (isNaN(height) || isNaN(weight) || isNaN(age)) {
            document.getElementById('result').textContent = "Please enter valid values.";
            return;
        }

        const bmi = weight / (height * height);

        let classification = '';
        if (bmi < 18.5) {
            classification = 'Underweight';
        } else if (bmi < 24.9) {
            classification = 'Normal weight';
        } else if (bmi < 29.9) {
            classification = 'Overweight';
        } else {
            classification = 'Obesity';
        }

        document.getElementById('result').textContent = `BMI: ${bmi.toFixed(2)} (${classification})`;
    });
