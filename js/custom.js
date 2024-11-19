document.getElementById("registrationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche la soumission du formulaire pour effectuer la validation

    // Réinitialisation des erreurs
    let isValid = true;
    document.querySelectorAll(".error-message").forEach(error => error.textContent = "");

    // Récupération des valeurs du formulaire
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const phone = document.getElementById("phone").value.trim();
    const school = document.getElementById("school").value.trim();
    const speciality = document.getElementById("speciality").value;
    const cv = document.getElementById("cv").files[0];
    const coverLetter = document.getElementById("cover_letter").files[0];

    // Validation des champs requis
    if (!name) {
        isValid = false;
        document.getElementById("nameError").textContent = "Le nom est requis.";
    } else if (name.length < 3) {
        isValid = false;
        document.getElementById("nameError").textContent = "Le nom doit contenir au moins 3 caractères.";
    }

    // Validation de l'email
    if (!email) {
        isValid = false;
        document.getElementById("emailError").textContent = "L'email est requis.";
    } else {
        const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!email.match(emailPattern)) {
            isValid = false;
            document.getElementById("emailError").textContent = "Veuillez entrer un e-mail valide.";
        }
    }

    // Validation du téléphone
    if (!phone) {
        isValid = false;
        document.getElementById("phoneError").textContent = "Le numéro de téléphone est requis.";
    } else {
        const phonePattern = /^(68|65|67|62|69)\d{7}$/;
        if (!phone.match(phonePattern)) {
            isValid = false;
            document.getElementById("phoneError").textContent = "Le numéro de téléphone doit commencer par 68, 65, 67, 62 ou 69.";
        }
    }

    // Validation de l'école
    if (!school) {
        isValid = false;
        document.getElementById("schoolError").textContent = "Le nom de l'école est requis.";
    }

    // Validation de la spécialité
    if (speciality === "Select A Speciality") {
        isValid = false;
        document.getElementById("specialityError").textContent = "La spécialité est requise.";
    }

    // Validation du CV
    if (!cv) {
        isValid = false;
        document.getElementById("cvError").textContent = "Le CV est requis.";
    } else {
        const allowedExtensions = ["pdf", "doc", "docx", "jpg", "jpeg", "png"];
        const fileExtension = cv.name.split('.').pop().toLowerCase();
        if (!allowedExtensions.includes(fileExtension)) {
            isValid = false;
            document.getElementById("cvError").textContent = "Le fichier CV doit être un fichier PDF, DOC, DOCX, JPG, JPEG, ou PNG.";
        }
    }

    // Validation de la lettre de motivation
    if (!coverLetter) {
        isValid = false;
        document.getElementById("coverLetterError").textContent = "La lettre de motivation est requise.";
    } else {
        const allowedExtensions = ["pdf", "doc", "docx", "jpg", "jpeg", "png"];
        const fileExtension = coverLetter.name.split('.').pop().toLowerCase();
        if (!allowedExtensions.includes(fileExtension)) {
            isValid = false;
            document.getElementById("coverLetterError").textContent = "Le fichier de la lettre de motivation doit être un fichier PDF, DOC, DOCX, JPG, JPEG, ou PNG.";
        }
    }

    // Si tout est valide, soumettre le formulaire
    if (isValid) {
        this.submit();  // Si tout est valide, soumettre le formulaire
    }
});