const { test, expect } = require('@jest/globals')
const teszt=require('./verifyMsg')
//const checkCard=require('./form')

test("A string hossz ellenőrzése",()=>{
    let flag=teszt('abc')
    expect(flag).toBe(false)
});