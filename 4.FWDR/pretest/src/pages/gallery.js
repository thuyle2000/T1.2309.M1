import React from 'react';

function Gallery(props) {
    const img_style={
        with: "70%",
        boxShadow: "3px 3px 3px gray"
    }

    return (
        <div>
            <h3>Noel 2023</h3>
            <hr/>
            <img src='/images/noel 3.jpg' alt='noel' style={img_style} />
        </div>
    );
}

export default Gallery;