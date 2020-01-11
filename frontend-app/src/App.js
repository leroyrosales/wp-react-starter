import React, { Fragment } from 'react';
import './App.css';
import Posts from './components/Posts';
import { BrowserRouter as Router, Route } from 'react-router-dom';
import PostPage from './components/PostPage';

function App() {
  return (
    <Router>
      <Fragment>
        <Route exact path="/" component={Posts} />
        <Route exact path="/post/:id" component={PostPage} />
      </Fragment>
    </Router>
  );
}

export default App;
