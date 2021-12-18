import React from 'react';
import { HashRouter, Route, Switch } from 'react-router-dom';
// import MainNavbar from './components/general/MainNavbar';
import NotFound from './pages/NotFound';
import ReactAppThemOne from './ReactAppThemeOne';
import ReactAppThemeTwo from './test/ReactAppThemeTwo';

function ReactWpApp1() {
  return (
    <HashRouter>
      {/* <MainNavbar /> */}
      <Route exact path="/">
        <ReactAppThemOne />
      </Route>
      <Route exact path="/page">
        <ReactAppThemeTwo />
      </Route>
      <Route path="/*">
        <NotFound />
      </Route>
    </HashRouter>
  );
}

export default ReactWpApp1;
