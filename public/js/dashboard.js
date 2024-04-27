let issueForm;
$("#diagnosed, #submit").on("click", async (e) => {
    e.preventDefault()
    issueForm = $("form#issue-form")[0]
    let brandType = issueForm[1].value
    let issue1 = issueForm[2].value
    let issue2 = issueForm[3].value
    let issue3 = issueForm[4].value

    let hints = ""
    let deviceId = 0
    Swal.fire({
        title: 'Analysing the issues',
        html: 'Please wait...',
        timer: 2000,
        allowEscapeKey: false,
        allowOutsideClick: false,
        didOpen: () => {
            Swal.showLoading()
            timerInterval = setInterval(100);
        },
        willClose: () => {
            clearInterval(timerInterval);
            Swal.fire({
                icon: "success",
                title: `Issues`,
                html: `${hints}`,
                // showDenyButton: true,
                confirmButtonText: 'View Details',
                // denyButtonText: `Return to dashboard`
            }).then((okay) => {
                if (okay.isConfirmed) {
                    location.href = `/diagnosing-result/${deviceId}`
                }
            });
        }
    });

    const jsonData = {
        brandType: brandType,
        issues: [
            issue1.toLowerCase(),
            issue2.toLowerCase(),
            issue3.toLowerCase(),
        ],
    }
    try {
        const res = await axios.post("/diagnosing", jsonData)
        console.log(res)
        hints = res.data.hints
        let list = ""
        let increment = 0
        hints.map(data => {
            increment += 1
            list += `
                    <p>${increment}. ${data}</p>
                `
        })
        deviceId = res.data.device.id
        hints = list
        brandType = ""
        issue1 = ""
        issue2 = ""
        issue3 = ""
    } catch (error) {
        console.error(error)
    }
})

$("button#next-button1").on("click", (e) => {
    e.preventDefault()
    issueForm = $("form#issue-form")[0]
    let brandType = issueForm[1].value
    let issue1 = issueForm[2].value
    if (issue1) {
        $(".select1").addClass("d-none")
        $(".select-brand").addClass("d-none")
        $(".select2").removeClass("d-none")
        $("button#next-button1").addClass("d-none")
        $("button#next-button2").removeClass("d-none")
        removeOptionIfSelected("issue-select2", issueForm[2].value)
    } else {
        Swal.fire({
            icon: "error",
            title: "You forgot to select",
            text: "Select Issue",
            // showDenyButton: true,
            confirmButtonText: 'OK',
            // denyButtonText: `Don 't save`
        }).then((okay) => {
            console.log(okay)
            // location.href = "/"
        });
        return
    }
})

$("button#next-button2").on("click", (e) => {
    e.preventDefault()
    let issue2 = issueForm[3].value
    if (issue2) {
        removeOptionIfSelected("issue-select3", issueForm[2].value)
        removeOptionIfSelected("issue-select3", issueForm[3].value)
        $(".select2").addClass("d-none")
        $(".select3").removeClass("d-none")
        $("button#next-button2").addClass("d-none")
        $("button#submit").removeClass("d-none")
        $("button#diagnosed").addClass("d-none")
    } else {
        Swal.fire({
            icon: "error",
            title: "You forgot to select",
            text: "Select Issue",
            // showDenyButton: true,
            confirmButtonText: 'OK',
            // denyButtonText: `Don 't save`
        }).then((okay) => {
            console.log(okay)
            // location.href = "/"
        });
        return
    }
})

function removeOptionIfSelected(selectId, optionValue) {
    $(`#${selectId} option[value="${optionValue}"]`).remove();
}

// $("#").on("submit", async (e) => {
//     e.preventDefault()
//     if (issueForm[3].value != "" || issueForm[4].value != "" || issueForm[5]
//         .value != "" || issueForm[6].value != "") {
//         let timeInterval;
//         let issue_id;
//         let results;
//         Swal.fire({
//             title: 'Analysing the issues',
//             html: 'Please wait...',
//             timer: 2000,
//             allowEscapeKey: false,
//             allowOutsideClick: false,
//             didOpen: () => {
//                 Swal.showLoading()
//                 timerInterval = setInterval(100);
//             },
//             willClose: () => {
//                 clearInterval(timerInterval);
//                 Swal.fire({
//                     icon: "success",
//                     title: "Here is the result",
//                     html: `${results}`,
//                     showDenyButton: true,
//                     confirmButtonText: 'Go to issues details',
//                     denyButtonText: `Return to dashboard`
//                 }).then((okay) => {
//                     if (okay.isConfirmed) {
//                         location.href = `/diagnosing-result/${issue_id}`
//                     }
//                 });
//             }
//         });
//         const issues = {
//             // q1: issueForm[1].value,
//             q1: "Laptop",
//             q2: issueForm[1].value,
//             q3: issueForm[2].value,
//             issue1: issueForm[3].value,
//             issue2: issueForm[4].value,
//             issue3: issueForm[5].value,
//             issue4: issueForm[6].value,
//             issue5: issueForm[7].value,
//         }
//         try {
//             const res = await axios.post("/diagnosing", issues)
//             console.log(res)
//             hints = res.data.hints
//             var list = ""
//             hints.map((data) => {
//                 list += `<li>${data}</li>`
//             })
//             results = list
//             issue_id = res.data.issue_id
//         } catch (error) {
//             console.error(error)
//         }
//     } else {
//         Swal.fire({
//             icon: "error",
//             title: "You forgot to select",
//             text: "Select atleast one issue",
//             // showDenyButton: true,
//             confirmButtonText: 'OK',
//             // denyButtonText: `Don 't save`
//         }).then((okay) => {
//             console.log(okay)
//             // location.href = "/"
//         });
//     }
// })