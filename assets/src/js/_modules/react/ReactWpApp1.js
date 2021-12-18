import React from 'react';
import { HashRouter, Route, Switch } from 'react-router-dom';
import MainNavbar from './components/general/MainNavbar';
import NotFound from './pages/NotFound';
import ReactAppThemOne from './pages/ReactAppThemeOne';
import ReactAppThemeTwo from './pages/ReactAppThemeTwo';
import HomePage from './pages/HomePage';

function ReactWpApp1() {
  return (
    <HashRouter>
      <MainNavbar />
      <main>
        <Switch>
          <Route exact path="/">
            <HomePage />
          </Route>
          <Route exact path="/page1">
            <ReactAppThemOne />
          </Route>
          <Route exact path="/page2">
            <ReactAppThemeTwo />
          </Route>
          <Route path="/*">
            <NotFound />
          </Route>
        </Switch>
      </main>
    </HashRouter>
  );
}

export default ReactWpApp1;
