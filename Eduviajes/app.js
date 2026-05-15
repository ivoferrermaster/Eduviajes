document.addEventListener("DOMContentLoaded", () => {
    console.log("JS cargado");
    if (!document.getElementById("btn-calcular-requisitos")) {
        console.log("No en página de inicio, saliendo");
        return;
    }

    const selectorNivel = document.getElementById("selector-nivel");
    const selectorUbicacion = document.getElementById("selector-ubicacion");
    const resultadoDiv = document.getElementById("resultado-asistente");
    const btnCalcular = document.getElementById("btn-calcular-requisitos");

    console.log("Elementos encontrados:", selectorNivel, selectorUbicacion, resultadoDiv, btnCalcular);

    if (btnCalcular) {
        btnCalcular.addEventListener("click", () => {
            console.log("Botón clicado");
            const nivel = selectorNivel.value;
            const ubicacion = selectorUbicacion.value;
            console.log("Valores:", nivel, ubicacion);

            if (nivel === "" || ubicacion === "") {
                resultadoDiv.innerHTML = "<p style='color: red;'>Por favor, selecciona nivel y ubicación.</p>";
                return;
            }

            let requisitos = "";
            if (nivel === "universitario" && ubicacion === "caba") {
                requisitos = "Requisitos: Certificado de alumno regular UBA o Univ. Pública, DNI con domicilio en CABA.";
            } else {
                requisitos = "Requisitos: Constancia de alumno regular y DNI actualizado.";
            }

            resultadoDiv.innerHTML = `
                <div style="background: #e9ecef; padding: 15px; border-radius: 5px; margin-top: 15px;">
                    <h4>Requisitos para tu trámite:</h4>
                    <p>${requisitos}</p>
                    <a href="index.php?vista=solicitud" class="btn">Iniciar Solicitud</a>
                </div>
            `;
        });
    } else {
        console.log("Botón no encontrado");
    }
});