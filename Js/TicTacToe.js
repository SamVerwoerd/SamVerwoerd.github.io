import Player from "./Player.js";

const players = [];
let currentPlayer = 0; // This is the index of the array of the currentplayer
const fields = document.querySelectorAll('.board > .field');
const resetButton = document.querySelector(".reset-btn");
//Create two players aligned with the Player class
 const playerOne = new Player("Player 1", 'X');
 const playerTwo = new Player("Player 2", 'O');
//Add both players to the players array
 players.push(playerOne, playerTwo);


//adding symbol to the field
for (let i = 0; i < fields.length; i++) {
    const field = fields[i]
    field.addEventListener('click', function(e) {
        console.log(e)
        if(addSymbolToField(field))
        {
            let symbolText = document.createElement('h2')
            field.append(symbolText)
            
            symbolText.textContent = players[currentPlayer].symbol;

            //Makes the symbols switch
            if(currentPlayer == 0)
            {
                currentPlayer = 1;
            }
            else
            {
                currentPlayer = 0;
            }
        }
        checkWinner()
    })
}


resetButton.addEventListener("click", resetGame);


function addSymbolToField(field) {
    console.log(field)
    const fieldContent = field.textContent;
    //Checks if the field is already in use
    if (fieldContent === 'X' || fieldContent === 'O') {
        alert('This field can not be used');
        return;
    }

    return true;
}

//Win Algorithm 
function checkWinner() 
{
    const winnningLines = [   
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6],
      ];

    let X = 0;
    let O = 0;
    
    for (let i = 0; i < winnningLines.length; i++)
    {
        const winline = winnningLines[i];
        console.log(winline);

         X = 0;
         O = 0;

        for (let j = 0; j < winline.length; j++)
        {
            console.log(winnningLines[i][j]);

            const fieldIndex = winline[j]
            console.log(fieldIndex);
            const symbol = fields[fieldIndex].textContent;
            console.log(symbol);
            
            if(symbol.toLowerCase() === "x")
            {
                X++;
            }
            else if(symbol.toLowerCase() === "o")
            {
                O++;
            }

            if(X === 3)
            {
                alert(playerOne.name + ' has won');
                location.reload();
            }
            else if(O === 3)
            {
                alert(playerTwo.name + ' has won');
                location.reload();
            } 
        }
    }
        
    }
    /**
     * Assignment
     * Add an algorithm to check if someone has three in a row
     * Try to use Internet - if not found the teacher will give you one
     * Also make sure you check for a draw (gelijkspel)
     * Again what more needs to be done, make a short todolist
     */

//Reset
function resetGame() 
{
    location.reload();
     alert("Board has been reset.")
}

console.log('File loaded');