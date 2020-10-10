import React from 'react';
import ReactDOM from 'react-dom';

/*function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Example Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}*/
class Example extends React.Component {

    componentDidMount() {console.log('step 1...');
        const apiUrl = 'http://127.0.0.1:8000/api/jobseakerProfiles/2';
        fetch(apiUrl)
            .then((response) => response.json())
            .then((data) => console.log('This is your data', data));
    }

    render() {
        return <h1>my Component has Mounted, Check the browser 'console' </h1>;
    }
}

export default Example;

if (document.getElementById('example')) {
    ReactDOM.render(<Example />, document.getElementById('example'));
}
