import React, { Component, Fragment } from 'react'
import axios from 'axios';
import { Link } from 'react-router-dom';

export class PostPage extends Component {
    state = {
        post: {},
        isLoaded: false
    }

    componentDidMount(){
        // wp site url
        const wpUrl = 'http://wp-react-site.lndo.site';
        axios.get(wpUrl + `/wp-json/wp/v2/posts/${this.props.match.params.id}`)
            .then(res => (
                this.setState({
                    post: res.data,
                    isLoaded: true
                })
            ))
            .catch(err => console.log(err));
    }

    render() {
        const { post, isLoaded } = this.state;
        if(isLoaded){
            return (
                <Fragment>
                    <Link to="/">Go Back</Link>
                    <hr/>
                    <h1>{ post.title.rendered }</h1>
                </Fragment>
            )
        }

        return <h3>Loading...</h3>;
    }
}

export default PostPage
