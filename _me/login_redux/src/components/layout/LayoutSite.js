import React from 'react'

import Footer from '../elements/footer/Footer'
import Loading from '../elements/loading/Loading'

class LayoutSite extends React.Component {
  render() {
    return (
      <React.Fragment>
        <div className="jumbotron">
          <h3>Login com Redux</h3>
        </div>
        <Loading />

        {this.props.children}

        <Footer />
      </React.Fragment>
    )
  }
}

export default LayoutSite
