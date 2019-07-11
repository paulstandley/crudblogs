import React from 'react';
import ReactDOM from 'react-dom';

export default class Index extends Component {
  constructor(props) {
    super(props);
    this.state = {  }
  }
  render() { 
    return (
      <div>
        hi
      </div>
    );
  }
}
 
if (document.getElementById('root')) {
  ReactDOM.render(<Index />, document.getElementById('root'));
}