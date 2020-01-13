import React, { Component } from 'react'
import axios from 'axios';
import PropTypes from 'prop-types';
import { Link } from 'react-router-dom';

export class PostItem extends Component {
    state = {
        imgUrl: '',
        author: '',
        isLoaded: false
    }
    static propTypes = {
        post: PropTypes.object.isRequired
    }

    componentDidMount(){
        // wp site url
        const wpUrl = 'http://wpreactsite.lndo.site';
        const { featured_media, author } = this.props.post;
        const getImageUrl = axios.get(wpUrl +`/wp-json/wp/v2/media/${featured_media}`);
        const getAuthor = axios.get(wpUrl + `/wp-json/wp/v2/users/${author}`);

        Promise.all([getImageUrl, getAuthor]).then(res => {
            this.setState({
                imgUrl: res[0].data.media_details.sizes.full.source_url,
                author: res[1].data.name,
                isLoaded: true
            })
        });
    }

    render() {

        const { id, title, excerpt } = this.props.post;
        const { author, imgUrl, isLoaded } = this.state;

        if(isLoaded){
            return (
                <div>
                    <h2>{ title.rendered }</h2>
                    <small>{ author }</small>
                    <img src={ imgUrl } />
                    <p dangerouslySetInnerHTML={{ __html: excerpt.rendered }} />
                    <Link to ={`/post/${id}`}>Check this post</Link>
                </div>
            )
        }

        return null;
    }
}

export default PostItem
