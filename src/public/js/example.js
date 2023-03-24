
// const dni = "75582321";

const id = document.getElementById("id")

async function RenderDatas() {
    let response = await fetch("https://dniruc.apisperu.com/api/v1/dni/75582321?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Inpha3Jlc3QxMzVAZ21haWwuY29tIn0.1tJfo4igS1km8gj05FJjlXuLBAtRw9lkCzUaCyYYIM4")
    
    let data = response.json()
    

    id.innerHTML = `<p>${data.nombres}</p>`
    console.log(data);
    
}

RenderDatas()
