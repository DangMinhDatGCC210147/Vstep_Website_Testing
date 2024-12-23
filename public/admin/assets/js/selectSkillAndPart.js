document.addEventListener('DOMContentLoaded', function () {
    const skillSelect = document.getElementById('skillSelect');
    const partSelect = document.getElementById('partSelect');
    const submitBtn = document.getElementById('submitBtn');

    const parts = {
        Listening: ["Part 1", "Part 2", "Part 3"],
        Reading: ["Part 1", "Part 2", "Part 3", "Part 4"],
        Writing: ["Part 1", "Part 2"],
        Speaking: ["Part 1", "Part 2", "Part 3"]
    };

    function validateForm() {
        if (skillSelect.value !== "" && partSelect.value !== "") {
            submitBtn.disabled = false;
        } else {
            submitBtn.disabled = true;
        }
    }

    skillSelect.addEventListener('change', function() {
        const selectedSkill = skillSelect.value;
        const partOptions = parts[selectedSkill] || [];

        partSelect.innerHTML = '<option value="" selected>Choose part name</option>'; // Clear existing options
        partOptions.forEach(part => {
            const option = document.createElement('option');
            option.value = part.replace(" ", "_");
            option.textContent = part;
            partSelect.appendChild(option);
        });

        validateForm();
    });

    partSelect.addEventListener('change', validateForm);
});
