import React, { Component } from 'react';

// tao component 'Hello' bang ky thuat lap trinh functiona
export function Hello(props) {
    return (
        <div>
            {/* <h2>Hello Mr.Phong, Welcome to ReactJS </h2> */}
            <h2>Hello {props.name}, Welcome to ReactJS </h2>
            <hr/>
        </div>
    );
}


// tao component 'Greeting' bang cach tao class
export class Greeting extends Component {
    render() {
        return (
            <div>
                <h3 style={{color:'lightblue'}}>
                    How are you today 🎀🍭🍧?</h3>
            </div>
        );
    }
}





