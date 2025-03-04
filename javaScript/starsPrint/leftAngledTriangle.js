/* 
    Stars Print the Left Angle Triangle.

 */

function leftAngledTriangle(n) {
    for (let i = 0; i < n; i++) {
        let row = "";

        // Print leading spaces
        for (let j = 0; j < n - i - 1; j++) {
            row += " ";
        }

        // Print stars
        for (let k = 0; k <= i; k++) {
            row += "*";
        }

        console.log(row); // Print the full row
    }
}

// Call the function with n = 5
let n = 5;
leftAngledTriangle(n);
