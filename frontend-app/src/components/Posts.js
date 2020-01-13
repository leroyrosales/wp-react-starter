import React, { Component } from 'react'
import axios from 'axios';
import PostItem from '../components/PostItem';

export class Posts extends Component {
    state = {
        posts: [],
        isLoaded: false,
    }

    componentDidMount(){
        // wp site url
        const wpUrl = 'http://wpreactsite.lndo.site';

        // axios to fetch data
        axios.get(wpUrl + '/wp-json/wp/v2/posts')
            .then(res => this.setState({
                posts: res.data,
                isLoaded: true
            }))
            .catch(err => console.log(err));
        
    }

    render() {
        const { posts, isLoaded } = this.state;
        
        if(isLoaded) {
            return (
                <div>
                   { posts.map(post => (
                    <PostItem key={post.id} post={post} />
                   ))}
                </div>

            )
        }

        return <h3>loading...</h3>
    }
}

export default Posts
